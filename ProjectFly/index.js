'use strict'; // Mode strict du JavaScript

/*************************************************************************************************/
/* ****************************************** DONNEES ****************************************** */
/*************************************************************************************************/

var img1 = document.getElementById('img1')
var img2 = document.getElementById('img2')
var img3 = document.getElementById('img3')
var pics = [img1, img2, img3]



var select = 0
var postpictures = document.getElementById('slidepics')
var random
var randphotos

var intervalid
var isPlaying = false

/*************************************************************************************************/
/* ***************************************** FONCTIONS ***************************************** */
/*************************************************************************************************/
function previous() {
    pics[select].classList.toggle("hidden")
    select--
    if (select < 0) {
        select = pics.length - 1
    }
    pics[select].classList.toggle("hidden")
}




function next() {
    pics[select].classList.toggle("hidden")
    select++
    if (select == pics.length) {
        select = 0
    }
    pics[select].classList.toggle("hidden")

}



function stop() {
    clearInterval(intervalid)
}


function play() {
    intervalid = setInterval(next, 4000)
}

function stopplay() {
    if (isPlaying == false) {
        isPlaying = true
        play()

    } else {
        isPlaying = false
        stop()

    }

}



function keyDown(event) {
    switch (event.keyCode) {
        case 32:
            stopplay()
            break
        case 37:
            next()
            break
        case 39:
            previous()

    }
}



/*************************************************************************************************/
/* ************************************** CODE PRINCIPAL *************************************** */
/*************************************************************************************************/




document.addEventListener("keydown", keyDown)
play()