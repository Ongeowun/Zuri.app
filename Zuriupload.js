async function uploadFile() {
    let formData = new FormData();           
    formData.append("file", fileupload.files[0]);
    await fetch('/upload.php', {
      method: "POST", 
      body: formData
    });    
    alert('Your App is frozen succesfully.');
}