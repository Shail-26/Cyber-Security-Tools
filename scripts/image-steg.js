var imgdatauri;

function readURL(input) {
    document.getElementById("none").style.display = "none";
    document.getElementById("afterText1").style.display = "block";
    document.getElementById("afterText2").style.display = "block";
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            document.querySelector("#image1").src = e.target.result;
            imgdatauri = e.target.result;   
        };
    }
    reader.readAsDataURL(input.files[0]);
}

function decode(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            console.log(steg.decode(e.target.result));

            document.querySelector('#decoded').innerText = steg.decode(e.target.result);
        };
    }
    reader.readAsDataURL(input.files[0]);
}


function hideText() {
    document.querySelector("#image2").src = steg.encode(document.querySelector('#inputMsg').value, imgdatauri);
}
