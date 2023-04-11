function uploadGame(){
    var fileInput = document.getElementById("game-file");
    var file = fileInput.files[0];
    var formData = new FormData();
    formData.append("game-file",file);

    var xhr = new XMLHttpRequest();
    xhr.open("POST","upload.php");
    xhr.onload = function(){
        if(xhr.status === 200){
            alert("Game uploaded successfully");
            fileInput.value = "";
        }else{
            alert("Error uploading game");
        }
    };
    xhr.send(formData);
}