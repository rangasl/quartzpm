function galleryChange(ele) {
  const gImg1 = document.getElementById("g_img_1");
  const gImg2 = document.getElementById("g_img_2");
  const gImg3 = document.getElementById("g_img_3");
  const gImg4 = document.getElementById("g_img_4");
  const gImg5 = document.getElementById("g_img_5");
  const gImg6 = document.getElementById("g_img_6");

  const id = ele.id;
  const imgName = "g_" + id;

  gImg1.setAttribute("src", "./images/Galary/" + imgName + "_1.png");
  gImg2.setAttribute("src", "./images/Galary/" + imgName + "_2.png");
  gImg3.setAttribute("src", "./images/Galary/" + imgName + "_3.png");
  gImg4.setAttribute("src", "./images/Galary/" + imgName + "_4.png");
  gImg5.setAttribute("src", "./images/Galary/" + imgName + "_5.png");
  gImg6.setAttribute("src", "./images/Galary/" + imgName + "_6.png");
}
