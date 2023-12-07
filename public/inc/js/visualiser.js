"use strict";
let currentVisu = 0;
const onLoad = () => {
  const nextButton = document.getElementById("nextButton");
  const backButton = document.getElementById("backButton");
  const listItemsVisus = document.querySelectorAll(".itemVisu");
  console.log(listItemsVisus);
  if (
    nextButton instanceof HTMLButtonElement &&
    backButton instanceof HTMLButtonElement &&
    listItemsVisus.length > 0
  ) {
    listItemsVisus.forEach((el) => {
      if (!(el instanceof HTMLDivElement)) {
        throw Error("n'est pas une div html");
      } else {
        el.style.display = "none";
      }
    });
    listItemsVisus[currentVisu].style.display = "block";
    // Tout est bon
    const handleButton = (isMore = true) => {
      const params = {
        isMore,
        currentVisu,
        listItemsVisus: listItemsVisus.length,
      };
      console.log(params);
      if (
        (isMore ||
        currentVisu > 0) &&
        (!isMore || currentVisu+1 < listItemsVisus.length)
      ) {
        listItemsVisus[currentVisu].style.display = "none";
        if (isMore) {
          currentVisu++;
        } else {
          currentVisu--;
        }
        listItemsVisus[currentVisu].style.display = "block";
      } else alert("vous etes arrivez au bout");
    };

    nextButton.addEventListener("click", () => handleButton(true));
    backButton.addEventListener("click", () => handleButton(false));
  } else {
    throw Error("mauvais types de #nextButton et #backButton");
  }
};

onLoad();
