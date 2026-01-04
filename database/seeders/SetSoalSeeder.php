<?php

namespace Database\Seeders;

use App\Models\SetSoal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SetSoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //10
        SetSoal::create([
            'name' => 'Cambridge 10 Test 1',
            'thumbnail' => 'Self-drive tours in the USA',
            'kode' => 'XJ3XOcvqPbgdZwyl',
            'thumbnail_reading' => 'own_assets/images/thumbnails/set-1/1.jpeg',
            'thumbnail_listening' => 'own_assets/images/thumbnails/set-1/2.png',
            'thumbnail_speaking' => 'own_assets/images/thumbnails/set-1/3.jpeg',
            'thumbnail_writing' => 'own_assets/images/thumbnails/set-1/4.png',
            'kategori' => 'ielts'
        ]);
        SetSoal::create([
            'name' => 'Cambridge 10 Test 2',
            'thumbnail' => 'Transport survey',
            'kode' => 'QmN0FYAE2DCXRPdC',
            'thumbnail_reading' => 'own_assets/images/thumbnails/set-2/1.jpeg',
            'thumbnail_listening' => 'own_assets/images/thumbnails/set-2/2.png',
            'thumbnail_speaking' => 'own_assets/images/thumbnails/set-2/3.jpeg',
            'thumbnail_writing' => 'own_assets/images/thumbnails/set-2/4.png',
            'kategori' => 'ielts'
        ]);
        SetSoal::create([
            'name' => 'Cambridge 10 Test 3',
            'thumbnail' => 'Early Learning Childcare Centre Enrolment Form',
            'kode' => 's4gzzYRpwLnhLRFf',
            'thumbnail_reading' => 'own_assets/images/thumbnails/set-3/1.jpeg',
            'thumbnail_listening' => 'own_assets/images/thumbnails/set-3/2.png',
            'thumbnail_speaking' => 'own_assets/images/thumbnails/set-3/3.jpeg',
            'thumbnail_writing' => 'own_assets/images/thumbnails/set-3/4.png',
            'kategori' => 'ielts'
        ]);
        SetSoal::create([
            'name' => 'Cambridge 10 Test 4',
            'thumbnail' => 'THORNDYKE’S BUILDERS',
            'kode' => '11qYaGWPJUTxUVdq',
            'thumbnail_reading' => 'own_assets/images/thumbnails/set-4/1.jpeg',
            'thumbnail_listening' => 'own_assets/images/thumbnails/set-4/2.png',
            'thumbnail_speaking' => 'own_assets/images/thumbnails/set-4/3.jpeg',
            'thumbnail_writing' => 'own_assets/images/thumbnails/set-4/4.png',
            'kategori' => 'ielts'
        ]);

        //14
        SetSoal::create([
            'name' => 'Cambridge 14 Test 1',
            'thumbnail' => 'Crime Report Form',
            'kode' => '1kxpl5g3zFLGtmEY',
            'thumbnail_reading' => 'own_assets/images/thumbnails/set-5/1.jpeg',
            'thumbnail_listening' => 'own_assets/images/thumbnails/set-5/2.png',
            'thumbnail_speaking' => 'own_assets/images/thumbnails/set-5/3.jpeg',
            'thumbnail_writing' => 'own_assets/images/thumbnails/set-5/4.png',
            'kategori' => 'ielts'
        ]);
        SetSoal::create([
            'name' => 'Cambridge 14 Test 2',
            'thumbnail' => 'Total Health Clinic Patients’ Details',
            'kode' => 'nHmZBcocwalVytdH',
            'thumbnail_reading' => 'own_assets/images/thumbnails/set-6/1.jpeg',
            'thumbnail_listening' => 'own_assets/images/thumbnails/set-6/2.png',
            'thumbnail_speaking' => 'own_assets/images/thumbnails/set-6/3.jpeg',
            'thumbnail_writing' => 'own_assets/images/thumbnails/set-6/4.png',
            'kategori' => 'ielts'
        ]);
        SetSoal::create([
            'name' => 'Cambridge 14 Test 3',
            'thumbnail' => 'Flanders Conference Hotel',
            'kode' => 'YuuZXlhsVNh26gHr',
            'thumbnail_reading' => 'own_assets/images/thumbnails/set-7/1.jpeg',
            'thumbnail_listening' => 'own_assets/images/thumbnails/set-7/2.png',
            'thumbnail_speaking' => 'own_assets/images/thumbnails/set-7/3.jpeg',
            'thumbnail_writing' => 'own_assets/images/thumbnails/set-7/4.png',
            'kategori' => 'ielts'
        ]);
        SetSoal::create([
            'name' => 'Cambridge 14 Test 4',
            'thumbnail' => 'Enquiry about booking hotel for an event',
            'kode' => '5k29sSZyLQgQjLWX',
            'thumbnail_reading' => 'own_assets/images/thumbnails/set-8/1.jpeg',
            'thumbnail_listening' => 'own_assets/images/thumbnails/set-8/2.png',
            'thumbnail_speaking' => 'own_assets/images/thumbnails/set-8/3.jpeg',
            'thumbnail_writing' => 'own_assets/images/thumbnails/set-8/4.png',
            'kategori' => 'ielts'
        ]);

        //16
        SetSoal::create([
            'name' => 'Cambridge 16 Test 1',
            'thumbnail' => 'Children’s Engineering Workshops',
            'kode' => 'blsodB9LLhUn0zcg',
            'thumbnail_reading' => 'own_assets/images/thumbnails/set-9/1.jpeg',
            'thumbnail_listening' => 'own_assets/images/thumbnails/set-9/2.png',
            'thumbnail_speaking' => 'own_assets/images/thumbnails/set-9/3.jpeg',
            'thumbnail_writing' => 'own_assets/images/thumbnails/set-9/4.png',
            'kategori' => 'ielts'
        ]);
        SetSoal::create([
            'name' => 'Cambridge 16 Test 2',
            'thumbnail' => 'Copying photos to digital format',
            'kode' => 'XW16JROLKCFE4BMH',
            'thumbnail_reading' => 'own_assets/images/thumbnails/set-10/1.jpeg',
            'thumbnail_listening' => 'own_assets/images/thumbnails/set-10/2.png',
            'thumbnail_speaking' => 'own_assets/images/thumbnails/set-10/3.jpeg',
            'thumbnail_writing' => 'own_assets/images/thumbnails/set-10/4.png',
            'kategori' => 'ielts'
        ]);
        SetSoal::create([
            'name' => 'Cambridge 16 Test 3',
            'thumbnail' => 'Junior Cycle Camp',
            'kode' => 'NmeBcwURSR2ZPfdX',
            'thumbnail_reading' => 'own_assets/images/thumbnails/set-11/1.jpeg',
            'thumbnail_listening' => 'own_assets/images/thumbnails/set-11/2.png',
            'thumbnail_speaking' => 'own_assets/images/thumbnails/set-11/3.jpeg',
            'thumbnail_writing' => 'own_assets/images/thumbnails/set-11/4.png',
            'kategori' => 'ielts'
        ]);
        SetSoal::create([
            'name' => 'Cambridge 16 Test 4',
            'thumbnail' => 'Holiday Rental',
            'kode' => 'TqMfMy8BLvZp0JDm',
            'thumbnail_reading' => 'own_assets/images/thumbnails/set-12/1.jpeg',
            'thumbnail_listening' => 'own_assets/images/thumbnails/set-12/2.png',
            'thumbnail_speaking' => 'own_assets/images/thumbnails/set-12/3.jpeg',
            'thumbnail_writing' => 'own_assets/images/thumbnails/set-12/4.png',
            'kategori' => 'ielts'
        ]);

        //17
        SetSoal::create([
            'name' => 'Cambridge 17 Test 1',
            'thumbnail' => 'Buckworth Conservation Group',
            'kode' => 'QUApDKzp0Wn1GCiA',
            'thumbnail_reading' => 'own_assets/images/thumbnails/set-13/1.jpeg',
            'thumbnail_listening' => 'own_assets/images/thumbnails/set-13/2.png',
            'thumbnail_speaking' => 'own_assets/images/thumbnails/set-13/3.jpeg',
            'thumbnail_writing' => 'own_assets/images/thumbnails/set-13/4.png',
            'kategori' => 'ielts'
        ]);
        SetSoal::create([
            'name' => 'Cambridge 17 Test 2',
            'thumbnail' => 'Opportunities for voluntary work in Southoe village',
            'kode' => 'DPCLyNHpDTqSciXd',
            'thumbnail_reading' => 'own_assets/images/thumbnails/set-14/1.jpeg',
            'thumbnail_listening' => 'own_assets/images/thumbnails/set-14/2.png',
            'thumbnail_speaking' => 'own_assets/images/thumbnails/set-14/3.jpeg',
            'thumbnail_writing' => 'own_assets/images/thumbnails/set-14/4.png',
            'kategori' => 'ielts'
        ]);
        SetSoal::create([
            'name' => 'Cambridge 17 Test 3',
            'thumbnail' => 'Advice on surfing holidays',
            'kode' => 'wq6xHskL3uTj5VSU',
            'thumbnail_reading' => 'own_assets/images/thumbnails/set-15/1.jpeg',
            'thumbnail_listening' => 'own_assets/images/thumbnails/set-15/2.png',
            'thumbnail_speaking' => 'own_assets/images/thumbnails/set-15/3.jpeg',
            'thumbnail_writing' => 'own_assets/images/thumbnails/set-15/4.png',
            'kategori' => 'ielts'
        ]);
        SetSoal::create([
            'name' => 'Cambridge 17 Test 4',
            'thumbnail' => 'Easy Life Cleaning Services',
            'kode' => '15gOXcE7omDCL1uE',
            'thumbnail_reading' => 'own_assets/images/thumbnails/set-16/1.jpeg',
            'thumbnail_listening' => 'own_assets/images/thumbnails/set-16/2.png',
            'thumbnail_speaking' => 'own_assets/images/thumbnails/set-16/3.jpeg',
            'thumbnail_writing' => 'own_assets/images/thumbnails/set-16/4.png',
            'kategori' => 'ielts'
        ]);

        //18
        SetSoal::create([
            'name' => 'Cambridge 18 Test 1',
            'thumbnail' => 'Transport survey',
            'kode' => 'KeCD0au8jSaBuT3A',
            'thumbnail_reading' => 'own_assets/images/thumbnails/set-17/1.jpeg',
            'thumbnail_listening' => 'own_assets/images/thumbnails/set-17/2.png',
            'thumbnail_speaking' => 'own_assets/images/thumbnails/set-17/3.jpeg',
            'thumbnail_writing' => 'own_assets/images/thumbnails/set-17/4.png',
            'kategori' => 'ielts'
        ]);
        SetSoal::create([
            'name' => 'Cambridge 18 Test 2',
            'thumbnail' => 'Working at Milo’s Restaurants',
            'kode' => 'JSRJ0oDlxC0yFMgt',
            'thumbnail_reading' => 'own_assets/images/thumbnails/set-18/1.jpeg',
            'thumbnail_listening' => 'own_assets/images/thumbnails/set-18/2.png',
            'thumbnail_speaking' => 'own_assets/images/thumbnails/set-18/3.jpeg',
            'thumbnail_writing' => 'own_assets/images/thumbnails/set-18/4.png',
            'kategori' => 'ielts'
        ]);
        SetSoal::create([
            'name' => 'Cambridge 18 Test 3',
            'thumbnail' => 'Wayside Camera Club',
            'kode' => '8uQvKzYbHuROu9RJ',
            'thumbnail_reading' => 'own_assets/images/thumbnails/set-19/1.jpeg',
            'thumbnail_listening' => 'own_assets/images/thumbnails/set-19/2.png',
            'thumbnail_speaking' => 'own_assets/images/thumbnails/set-19/3.jpeg',
            'thumbnail_writing' => 'own_assets/images/thumbnails/set-19/4.png',
            'kategori' => 'ielts'
        ]);
        SetSoal::create([
            'name' => 'Cambridge 18 Test 4',
            'thumbnail' => 'Job details from employment agency',
            'kode' => 'yPLnQeqINAxbrnva',
            'thumbnail_reading' => 'own_assets/images/thumbnails/set-20/1.jpeg',
            'thumbnail_listening' => 'own_assets/images/thumbnails/set-20/2.png',
            'thumbnail_speaking' => 'own_assets/images/thumbnails/set-20/3.jpeg',
            'thumbnail_writing' => 'own_assets/images/thumbnails/set-20/4.png',
            'kategori' => 'ielts'
        ]);

        //19
        SetSoal::create([
            'name' => 'Cambridge 19 Test 1',
            'thumbnail' => 'Hinchingbrooke Country Park',
            'kode' => 'rbsuXiTcqh8ewr9Q',
            'thumbnail_reading' => 'own_assets/images/thumbnails/set-21/1.jpeg',
            'thumbnail_listening' => 'own_assets/images/thumbnails/set-21/2.png',
            'thumbnail_speaking' => 'own_assets/images/thumbnails/set-21/3.jpeg',
            'thumbnail_writing' => 'own_assets/images/thumbnails/set-21/4.png',
            'kategori' => 'ielts'
        ]);
        SetSoal::create([
            'name' => 'Cambridge 19 Test 2',
            'thumbnail' => 'Guitar Group',
            'kode' => '0XIGAcSMlticROES',
            'thumbnail_reading' => 'own_assets/images/thumbnails/set-22/1.jpeg',
            'thumbnail_listening' => 'own_assets/images/thumbnails/set-22/2.png',
            'thumbnail_speaking' => 'own_assets/images/thumbnails/set-22/3.jpeg',
            'thumbnail_writing' => 'own_assets/images/thumbnails/set-22/4.png',
            'kategori' => 'ielts'
        ]);
        SetSoal::create([
            'name' => 'Cambridge 19 Test 3',
            'thumbnail' => 'Local food shops',
            'kode' => 'GEf4EtQ1AZxTFhTw',
            'thumbnail_reading' => 'own_assets/images/thumbnails/set-23/1.jpeg',
            'thumbnail_listening' => 'own_assets/images/thumbnails/set-23/2.png',
            'thumbnail_speaking' => 'own_assets/images/thumbnails/set-23/3.jpeg',
            'thumbnail_writing' => 'own_assets/images/thumbnails/set-23/4.png',
            'kategori' => 'ielts'
        ]);
        SetSoal::create([
            'name' => 'Cambridge 19 Test 4',
            'thumbnail' => 'First day at work',
            'kode' => 'IgWhHunhjhOYd3hb',
            'thumbnail_reading' => 'own_assets/images/thumbnails/set-24/1.jpeg',
            'thumbnail_listening' => 'own_assets/images/thumbnails/set-24/2.png',
            'thumbnail_speaking' => 'own_assets/images/thumbnails/set-24/3.jpeg',
            'thumbnail_writing' => 'own_assets/images/thumbnails/set-24/4.png',
            'kategori' => 'ielts'
        ]);

        //20
        SetSoal::create([
            'name' => 'Cambridge 20 Test 1',
            'thumbnail' => 'Restaurant Recommendations',
            'kode' => 'xQKeqKYrkqfdgotg',
            'thumbnail_reading' => 'own_assets/images/thumbnails/set-25/1.jpeg',
            'thumbnail_listening' => 'own_assets/images/thumbnails/set-25/2.png',
            'thumbnail_speaking' => 'own_assets/images/thumbnails/set-25/3.jpeg',
            'thumbnail_writing' => 'own_assets/images/thumbnails/set-25/4.png',
            'kategori' => 'ielts'
        ]);
        SetSoal::create([
            'name' => 'Cambridge 20 Test 2',
            'thumbnail' => 'Local Councils',
            'kode' => 'EKX6hyJgeV3x0pxB',
            'thumbnail_reading' => 'own_assets/images/thumbnails/set-26/1.jpeg',
            'thumbnail_listening' => 'own_assets/images/thumbnails/set-26/2.png',
            'thumbnail_speaking' => 'own_assets/images/thumbnails/set-26/3.jpeg',
            'thumbnail_writing' => 'own_assets/images/thumbnails/set-26/4.png',
            'kategori' => 'ielts'
        ]);
        SetSoal::create([
            'name' => 'Cambridge 20 Test 3',
            'thumbnail' => 'Furniture Rental Companies',
            'kode' => 'bBhJMdwYSokWGAc9',
            'thumbnail_reading' => 'own_assets/images/thumbnails/set-27/1.jpeg',
            'thumbnail_listening' => 'own_assets/images/thumbnails/set-27/2.png',
            'thumbnail_speaking' => 'own_assets/images/thumbnails/set-27/3.jpeg',
            'thumbnail_writing' => 'own_assets/images/thumbnails/set-27/4.png',
            'kategori' => 'ielts'
        ]);
        SetSoal::create([
            'name' => 'Cambridge 20 Test 4',
            'thumbnail' => 'Advice on Family Visit',
            'kode' => '4JIjUOPpLAJ2FYdl',
            'thumbnail_reading' => 'own_assets/images/thumbnails/set-28/1.jpeg',
            'thumbnail_listening' => 'own_assets/images/thumbnails/set-28/2.png',
            'thumbnail_speaking' => 'own_assets/images/thumbnails/set-28/3.jpeg',
            'thumbnail_writing' => 'own_assets/images/thumbnails/set-28/4.png',
            'kategori' => 'ielts'
        ]);

        //PT-01
        SetSoal::create([
            'name' => 'PT-01',
            'thumbnail' => 'Hiring Company',
            'kode' => '2uSKN2WwOj6EYc1X',
            'thumbnail_reading' => 'own_assets/images/thumbnails/set-29/1.jpeg',
            'thumbnail_listening' => 'own_assets/images/thumbnails/set-29/2.png',
            'thumbnail_speaking' => 'own_assets/images/thumbnails/set-29/3.jpeg',
            'thumbnail_writing' => 'own_assets/images/thumbnails/set-29/4.png',
            'kategori' => 'ielts'
        ]);
        SetSoal::create([
            'name' => 'PT-02',
            'thumbnail' => 'Bedroom Furniture for Sale',
            'kode' => 'cwwPbLf22UsNEqIp',
            'thumbnail_reading' => 'own_assets/images/thumbnails/set-30/1.jpeg',
            'thumbnail_listening' => 'own_assets/images/thumbnails/set-30/2.png',
            'thumbnail_speaking' => 'own_assets/images/thumbnails/set-30/3.jpeg',
            'thumbnail_writing' => 'own_assets/images/thumbnails/set-30/4.png',
            'kategori' => 'ielts'
        ]);
    }
}
