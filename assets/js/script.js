document.addEventListener("DOMContentLoaded", function () {
  const readMoreBtns = document.querySelectorAll(".read-more-btn");

  readMoreBtns.forEach((btn) => {
    btn.addEventListener("click", function () {
      const postContent = this.previousElementSibling;
      const moreText = postContent.querySelector(".more-text");
      const dots = postContent.querySelector(".dots");

      if (moreText.style.display === "none" || moreText.style.display === "") {
        moreText.style.display = "block"; // Show more text (since it's a block element)
        dots.style.display = "none"; // Hide dots
        this.textContent = "Read Less"; // Change button text
      } else {
        moreText.style.display = "none"; // Hide more text
        dots.style.display = "inline"; // Show dots
        this.textContent = "Read More"; // Change button text
      }
    });
  });
});
