function uploadGame(){
    let fileInput = document.getElementById("game-file");
    let file = fileInput.files[0];
    let formData = new FormData();
    formData.append("game-file",file);

    let xhr = new XMLHttpRequest();
    xhr.open("POST","upload.php");
    xhr.onload = () => {
        if(xhr.status === 200){
            alert("Game uploaded successfully");
            fileInput.value = "";
        }else{
            alert("Error uploading game");
        }
    };
    xhr.send(formData);
}