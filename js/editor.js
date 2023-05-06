const blogTitleField = document.querySelector('.title');
const articleField = document.querySelector('.article');


const bannerImage = document.querySelector('#banner-upload');
const banner = document.querySelector('.banner');

let bannerPath;

const publishBtn = document.querySelector('.publish-btn');
const uploadInput = document.querySelector('#image-upload');

bannerImage.addEventListener('change', () => {
  uploadImage(bannerImage, "banner");
})

const uploadImage = (uploadFile, uploadType) => {
  const [file] = uploadFile.files;
  if(file && file.type.includes("images")){
      const formdata = new FormData();
      formdata.append('image', file);

      fetch('/upload', {
        method: 'post',
        body: formdata
      }).then(res => res.json())
      .then(data => {
        bannerPath = `${location.origin}/${data}`
        banner.style.backgroundImage = `url("${bannerPath}")`;
      })
  }
}