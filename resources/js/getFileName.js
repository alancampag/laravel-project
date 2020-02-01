window.displayFileName = () => {
    const fileInput = document.getElementById("fileInput01");
    let fileName = fileInput.files[0].name;
    fileInput.nextElementSibling.innerText = fileName;
};
