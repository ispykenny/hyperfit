export default function() {
  const body = document.getElementsByTagName("body")[0];
  let count = 3;
  let sum = 0;
  let faqCard;
  let loadMore;
  let faqStorage;

  if (body.classList.contains("single-services")) {
    count = 3;
    sum = 0;
    faqCard = document.querySelectorAll(".faq-card");
    loadMore = document.querySelector(".load-more-faq");
    faqStorage = [];
  }

  const loaderBuild = () => {
    if (!body.classList.contains("single-services")) return;
    if (faqCard.length <= count) {
      loadMore.style.display = "none";
    }
    for (let i = 0; i < faqCard.length; i++) {
      if (count <= i) {
        faqStorage.push(faqCard[i]);
        setTimeout(() => {
          faqCard[i].style.display = "none";
        });
      }
    }
  };

  const showMoreFaq = event => {
    event.preventDefault();
    sum = sum + 3;
    for (let i = 0; i < faqStorage.length; i++) {
      if (i < sum) {
        faqStorage[i].style.display = "block";
      }
    }
    if (sum >= faqStorage.length) {
      loadMore.innerHTML = "All Questions Loaded";
    }
  };
  if (body.classList.contains("single-services")) {
    loadMore.addEventListener("click", event => showMoreFaq(event));
  }
  loaderBuild();
}
