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
    listItemsVisus[currentVisu].style.display = "flex";
    // Tout est bon
    const handleButton = (isMore = true) => { //fonction au clique
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
        listItemsVisus[currentVisu].style.display = "flex";
      } else alert("vous etes arrive au bout");
    };

    nextButton.addEventListener("click", () => handleButton(true)); //ecouteur d evenement sur bouton
    backButton.addEventListener("click", () => handleButton(false)); //ecouteur d evenement sur bouton
    window.addEventListener('keydown', (event) => { //ecouteur d'evenement quand la tocuhe clavier presse vers le bas
      if (event.key === 'ArrowRight') {
        handleButton(true);
      } else if (event.key === 'ArrowLeft') {
        handleButton(false);
      }
    })
  } else {
    throw Error("mauvais types de #nextButton et #backButton");
  }
};

onLoad();
