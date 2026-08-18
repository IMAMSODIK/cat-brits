<?php

namespace App\Services;

use App\Models\Writing;

class WritingQuestionService
{
    public function getQuestion(Writing $writing): string
    {
        $setCode = $writing->setSoal->kode ?? '';
        if (!$setCode || !preg_match('/\A[A-Za-z0-9_-]+\z/', $setCode)) {
            return '';
        }

        $taskIndex = strcasecmp(trim($writing->task ?? ''), 'Task 2') === 0 ? 1 : 0;
        $paths = [
            resource_path("views/ielts/sets/{$setCode}/practice/writing.blade.php"),
            resource_path("views/ielts/sets/{$setCode}/mock/writing.blade.php"),
        ];

        foreach ($paths as $path) {
            if (!is_file($path)) {
                continue;
            }

            $source = file_get_contents($path);
            preg_match_all(
                '/<article\b[^>]*class=["\'][^"\']*\bpassage\b[^"\']*["\'][^>]*>(.*?)<\/article>/is',
                $source,
                $matches
            );

            if (!empty($matches[1][$taskIndex])) {
                return $this->resolveMarkup($matches[1][$taskIndex]);
            }
        }

        return '';
    }

    private function resolveMarkup(string $markup): string
    {
        $markup = preg_replace_callback(
            '/\{\{\s*asset\([\'\"]([^\'\"]+)[\'\"]\)\s*\}\}/',
            fn ($matches) => asset($matches[1]),
            $markup
        );

        $markup = preg_replace('/\{\{.*?\}\}/s', '', $markup);
        $markup = preg_replace('/\{\{--.*?--\}\}/s', '', $markup);

        return trim($markup);
    }
}
