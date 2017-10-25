import Typed from 'typed.js';

const options = {
    strings: [
        "Home loans made easy!",
        "Unlock some of the best deals on the market",
        "We work with all the major banks",
        "We negotiate for you",
        "Ask us about our cash back offers!",
    ],
    typeSpeed: 40,
    loop: true,
    backDelay: 1000,
    startDelay: 500,
}

const typed = new Typed("#intro-slogan", options);