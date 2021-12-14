function setValues(img, value) {
    var img_id = document.getElementById("image_id");
    var img_value = document.getElementById("img_value");

    img_id.setAttribute("value", img)
    img_value.setAttribute("value", value)
}