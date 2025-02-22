const fileInput = document.getElementById('file-input');
const fileForm = document.getElementById('file-form');
const progressContainer = document.getElementById('progress-container');
const compressedFilesContainer = document.getElementById('compressed-files');
const downloadBtn = document.getElementById('download-btn');

let compressedFiles = [];

fileForm.addEventListener('submit', (event) => {
  event.preventDefault();
  compressFiles(fileInput.files);
});

downloadBtn.addEventListener('click', () => {
  downloadCompressedFiles();
});

async function compressFiles(files) {
  for (let i = 0; i < files.length; i++) {
    const file = files[i];
    const compressedFile = await compressFile(file);
    compressedFiles.push(compressedFile);
    displayCompressedFile(compressedFile);
  }
  downloadBtn.disabled = false;
}

async function compressFile(file) {
  // The same code as before
}

function displayCompressedFile(file) {
  // The same code as before
}

function downloadCompressedFiles() {
  const zip = new JSZip();
  compressedFiles.forEach((file, index) => {
    zip.file(`compressed_file_${index + 1}.jpg`, file);
  });
  zip.generateAsync({ type: 'blob' }).then((content) => {
    const downloadLink = document.createElement('a');
    downloadLink.setAttribute('href', URL.createObjectURL(content));
    downloadLink.setAttribute('download', 'compressed_files.zip');
    document.body.appendChild(downloadLink);
    downloadLink.click();
    document.body.removeChild(downloadLink);
  });
}
