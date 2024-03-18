function showText(id) {
    const showText = document.getElementById(id);
    if (showText.type === "text") {
      showText.type = "password";
    }
    else {
      showText.type = "text";
    }
}