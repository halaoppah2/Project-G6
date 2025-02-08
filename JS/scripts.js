// Image Swapping
let currentImage = 1;
const images = ['img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', 'img5.jpg'];

setInterval(() => {
    currentImage = (currentImage % 5) + 1;
    document.getElementById('slider-img').src = `images/company/img${currentImage}.jpg`;
}, 3000);