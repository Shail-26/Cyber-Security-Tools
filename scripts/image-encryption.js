function showFileName(input) {
    const fileName = input.files[0].name;
    document.getElementById('file-name').textContent = 'Selected File: ' + fileName;
}
function showFileName1(input) {
    const fileName1 = input.files[0].name;
    document.getElementById('file-name1').textContent = 'Selected File: ' + fileName1;
}

function encryptImage() {
    const imageInput = document.getElementById('imageInput');
    const encryptionKey = document.getElementById('encryptionKey').value;
    
    const reader = new FileReader();
    reader.onload = function(event) {
        const imageData = event.target.result.split(',')[1]; // Get base64 image data
        
        const encrypted = CryptoJS.AES.encrypt(imageData, encryptionKey).toString();
        
        const downloadEncryptedLink = document.getElementById('downloadEncryptedLink');
        const downloadbtn = document.getElementById('download-btn');
        downloadEncryptedLink.href = 'data:image/png;base64,' + encrypted;
        downloadbtn.style.display = 'block';
    };
    
    reader.readAsDataURL(imageInput.files[0]);
}

function decryptImage() {
    const encryptedImageInput = document.getElementById('encryptedImageInput');
    const decryptionKey = document.getElementById('decryptionKey').value;
    
    const reader = new FileReader();
    reader.onload = function(event) {
        const encryptedImageData = event.target.result.split(',')[1]; // Get base64 image data
        let decrypted;
        try{
        decrypted = CryptoJS.AES.decrypt(encryptedImageData, decryptionKey).toString(CryptoJS.enc.Utf8);
        } catch (error) {
            alert('Decryption failed: Wrong Decryption Key');
            return;
        }
        
        const decryptedImage = document.getElementById('decryptedImage');
        const decryptedImageDisplay = document.getElementById('decryptedImageDisplay');
        decryptedImage.src = 'data:image/png;base64,' + decrypted;
        decryptedImageDisplay.style.display = 'block';

        const downloadDecryptedLink = document.getElementById('downloadDecryptedLink');
        const downloadbtn = document.getElementById('download-btn-decrypt');
        downloadDecryptedLink.href = 'data:image/png;base64,' + decrypted;
        downloadbtn.style.display = 'block';
    };
    
    reader.readAsDataURL(encryptedImageInput.files[0]);
}