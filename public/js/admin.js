imgInp.onchange = evt => {
    const [file] = imgInp.files
    if (file) {
        previewImg.src = URL.createObjectURL(file)
    }
}