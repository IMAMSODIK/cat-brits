<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="qr-code"></div>

    <script src="https://cdn.jsdelivr.net/npm/qr-code-styling@1.6.0/lib/qr-code-styling.js"></script>

    <script>
const qrCode = new QRCodeStyling({
    width: 300,
    height: 300,
    data: "https://pixelionsolution.com",
    image: "https://cat-dev.pixelionsolution.com/own_assets/logo/logo.png", // PATH LOGO
    dotsOptions: {
        color: "#000000",
        type: "rounded"
    },
    backgroundOptions: {
        color: "#ffffff"
    },
    imageOptions: {
        crossOrigin: "anonymous",
        margin: 8,
        imageSize: 0.3 // ukuran logo (30%)
    },
    qrOptions: {
        errorCorrectionLevel: "H" // WAJIB agar logo tidak rusak
    }
});

qrCode.append(document.getElementById("qr-code"));
</script>

    
</body>
</html>