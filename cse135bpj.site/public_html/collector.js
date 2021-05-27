// Get cookie
const cookieValue = document.cookie.split('; ').find(row => row.startsWith('user=')).split('=')[1];

/*
    Initialization on load
*/
window.addEventListener('load', () => {
    var freshLoad = true;

    fetch('https://cse135bpj.site/api/static/')
    .then(response => response.json())
    .then(data => {
        data.forEach(obj => {
            let userId = parseInt(obj[Object.keys(obj)[0]])

            if (userId == cookieValue) {
                freshLoad = false;
            }

        })

        if (freshLoad) {
            loadStatic();
            loadPerformance();
            loadActivity();
        } else {
            putReferrer();
        }
    })
    .catch((error) => {
        console.error("Error:", error);
    })

});

function putReferrer() {
    fetch('https://cse135bpj.site/api/activity/' + cookieValue, {
        method: 'PUT',
        headers: {
            'Content-Type': 'application/json',
            'Authorization': 'Basic ' + btoa('grader' + ":" + 'cse135Password')
        },
        body: JSON.stringify({
            "Referrer": document.referrer
        })
    })
    .then(response => response.json())
    .then(data => {
        console.log("Success:", data);
    })
    .catch((error) => {
        console.error("Error:", error);
    });
}

var enabledCSS = true;
var enabledImg = true;
var enabledJS = true;

function loadStatic() {
    if (document.getElementById('testCSS').offsetWidth != 3) {
        enabledCSS = false;
    }

    var img = document.getElementById('testImg');
    if(img.width === 0 && img.height === 0) {
        enabledImg = false;
    }

    var data = {
        "id": cookieValue,
        "UserAgent": navigator.userAgent,
        "UserLanguage": navigator.language,
        "UserCookie": navigator.cookieEnabled,
        "UserJS": enabledJS,
        "UserImages": enabledImg,
        "UserCSS": enabledCSS,
        "ScreenWidth": screen.width,
        "ScreenHeight": screen.height,
        "WindowWidth": window.innerWidth,
        "WindowHeight": window.innerHeight,
        "UserConnectionType": navigator.connection.effectiveType
    };

    fetch('https://cse135bpj.site/api/static', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Authorization': 'Basic ' + btoa('grader' + ":" + 'cse135Password')
        },
        body: JSON.stringify(data),
    })
    .then(response => response.json())
    .then(data => {
        console.log("Success:", data);
    })
    .catch((error) => {
        console.error("Error:", error);
    });
}

function loadPerformance() {

    var perfEntries = performance.getEntriesByType("navigation");
    var p = perfEntries[0];

    let d = new Date();
    let e = window.performance.timing.navigationStart
    var loadStart = e - d.setHours(0,0,0,0);
    let f = window.performance.timing.domContentLoadedEventEnd
    var loadEnd = f - d;

    var data = {
        "id": cookieValue,
        "TimingObject": JSON.stringify(p),
        "LoadStart": loadStart,
        "LoadEnd": loadEnd,
        "LoadTime": window.performance.timing.domContentLoadedEventEnd - window.performance.timing.navigationStart
    };

    fetch('https://cse135bpj.site/api/performance', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Authorization': 'Basic ' + btoa('grader' + ":" + 'cse135Password')
        },
        body: JSON.stringify(data),
    })
    .then(response => response.json())
    .then(data => {
        console.log("Success:", data);
    })
    .catch((error) => {
        console.error("Error:", error);
    });
}

function loadActivity() {
    let g = new Date();
    let h = new Date().getTime();
    var beginTime = h - g.setHours(0,0,0,0);

    var data = {
        "id": cookieValue,
        "CursorXPos": "",
        "CursorYPos": "",
        "Scrolling": 0,
        "KeyUp": "",
        "KeyDown": "",
        "Clicks": 0,
        "MouseLeft": 0,
        "MouseMiddle": 0,
        "MouseRight": 0,
        "BreakEnd": "",
        "BreakTime": "",
        "UserEnter": JSON.stringify(beginTime),
        "UserLeave": "",
        "Referrer": ""
    };

    fetch('https://cse135bpj.site/api/activity', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Authorization': 'Basic ' + btoa('grader' + ":" + 'cse135Password')
        },
        body: JSON.stringify(data),
    })
    .then(response => response.json())
    .then(data => {
        console.log("Success:", data);
    })
    .catch((error) => {
        console.error("Error:", error);
    });
}

/*
    Mouse Position
*/
var xCoord;
var yCoord;

window.addEventListener('mousemove', (event) => {
    xCoord = event.pageX;
    yCoord = event.pageY;
});
setInterval(function () {
    if(typeof xCoord !== 'undefined' || typeof yCoord !== 'undefined') {
        putMouseCoord(xCoord, yCoord);
    }
}, 3000);

function putMouseCoord(xCoord, yCoord) {
    fetch('https://cse135bpj.site/api/activity/' + cookieValue, {
        method: 'PUT',
        headers: {
            'Content-Type': 'application/json',
            'Authorization': 'Basic ' + btoa('grader' + ":" + 'cse135Password')
        },
        body: JSON.stringify({
            "CursorXPos": xCoord,
            "CursorYPos": yCoord
        })
    })
    .then(response => response.json())
    .then(data => {
        console.log("Success:", data);
    })
    .catch((error) => {
        console.error("Error:", error);
    });
}

/*
    Clicks
*/
var leftClick = false;
var middleClick = false;
var rightClick = false;

document.addEventListener('mousedown', event => {
    if (event.button == 0) {
        leftClick = true;
    } else if (event.button == 1) {
        middleClick = true;
    } else {
        rightClick = true;
    }

    putClick(leftClick, middleClick, rightClick);
});

function putClick(leftClick, middleClick, rightClick) {

    fetch('https://cse135bpj.site/api/activity/' + cookieValue)
    .then(response => response.json())
    .then(data => {

        let totalLeftClicks;
        let totalMiddleClicks;
        let totalRightClicks;

        totalClicks = data[0].Clicks + 1;
        if (leftClick) {
            totalLeftClicks = data[0].MouseLeft + 1;
        } else if (middleClick) {
            totalMiddleClicks = data[0].MouseMiddle + 1;
        } else {
            totalRightClicks = data[0].MouseRight + 1;
        }

        leftClick = false;
        middleClick = false;
        rightClick = false;

        return fetch('https://cse135bpj.site/api/activity/' + cookieValue, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': 'Basic ' + btoa('grader' + ":" + 'cse135Password')
            },
            body: JSON.stringify({
                "Clicks": totalClicks,
                "MouseLeft": totalLeftClicks,
                "MouseMiddle": totalMiddleClicks,
                "MouseRight": totalRightClicks
            })
        })
        .then(response => response.json())
        .then(data => {
            console.log("Success:", data);
        })
        .catch((error) => {
            console.error("Error:", error);
        });
    })
    .catch((error) => {
        console.error("Error:", error);
    })
}

/*
    Scrolling
*/
document.addEventListener('wheel', e => {
    putScroll(window.pageYOffset);
});

function putScroll(scrollOffset) {

    fetch('https://cse135bpj.site/api/activity/' + cookieValue)
    .then(response => response.json())
    .then(data => {
        return fetch('https://cse135bpj.site/api/activity/' + cookieValue, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': 'Basic ' + btoa('grader' + ":" + 'cse135Password')
            },
            body: JSON.stringify({
                "Scrolling": scrollOffset
            })
        })
        .then(response => response.json())
        .then(data => {
            console.log("Success:", data);
        })
        .catch((error) => {
            console.error("Error:", error);
        });
    })
    .catch((error) => {
        console.error("Error:", error);
    })
}

/*
    Keyboard Activity
*/
document.addEventListener('keydown', (event) => {
    let keyDown = event.code;
    putKeyDown(keyDown);
});

function putKeyDown(keyDown) {
    var keyDownString = "";

    fetch('https://cse135bpj.site/api/activity/' + cookieValue)
    .then(response => response.json())
    .then(data => {
        keyDownString = data[0].KeyDown;

        if(keyDownString === "") {
            keyDownString = keyDown.toString();
        } else {
            keyDownString = keyDownString + ", " + keyDown.toString();
        }

        let keyDownArray = keyDownString.split(",");
        let newKeyDownString = "";

        if(keyDownArray.length > 10) {
            for(i=1; i < keyDownArray.length; i++) {
                if(newKeyDownString === "") {
                    newKeyDownString = keyDownArray[i];
                } else {
                    newKeyDownString = newKeyDownString + ", " + keyDownArray[i];
                }
            }
        } else {
            newKeyDownString = keyDownString;
        }

        return fetch('https://cse135bpj.site/api/activity/' + cookieValue, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': 'Basic ' + btoa('grader' + ":" + 'cse135Password')
            },
            body: JSON.stringify({
                "KeyDown": newKeyDownString
            })
        })
        .then(response => response.json())
        .then(data => {
            console.log("Success:", data);
        })
        .catch((error) => {
            console.error("Error:", error);
        });
    })
    .catch((error) => {
        console.error("Error:", error);
    })
}

document.addEventListener('keyup', (event) => {
    let keyUp = event.code;
    putKeyUp(keyUp);
});

function putKeyUp(keyUp) {
    var keyUpString = "";

    fetch('https://cse135bpj.site/api/activity/' + cookieValue)
    .then(response => response.json())
    .then(data => {
        keyUpString = data[0].KeyUp;
        if(keyUpString === "") {
            keyUpString = keyUp.toString();
        } else {
            keyUpString = keyUpString + ", " + keyUp.toString();
        }


        let keyUpArray = keyUpString.split(",");
        let newKeyUpString = "";

        if(keyUpArray.length > 10) {
            for(i=1; i < keyUpArray.length; i++) {
                if(newKeyUpString === "") {
                    newKeyUpString = keyUpArray[i];
                } else {
                    newKeyUpString = newKeyUpString + ", " + keyUpArray[i];
                }
            }
        } else {
            newKeyUpString = keyUpString;
        }

        return fetch('https://cse135bpj.site/api/activity/' + cookieValue, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': 'Basic ' + btoa('grader' + ":" + 'cse135Password')
            },
            body: JSON.stringify({
                "KeyUp": newKeyUpString
            })
        })
        .then(response => response.json())
        .then(data => {
            console.log("Success:", data);
        })
        .catch((error) => {
            console.error("Error:", error);
        });
    })
    .catch((error) => {
        console.error("Error:", error);
    })
}

/*
    Leaving page
*/
window.addEventListener('beforeunload', (event) => {
    let y = new Date();
    let z = new Date().getTime();
    var endTime = z - y.setHours(0,0,0,0);
    putEndTime(endTime);
});

function putEndTime(endTime) {
    fetch('https://cse135bpj.site/api/activity/' + cookieValue, {
        method: 'PUT',
        headers: {
            'Content-Type': 'application/json',
            'Authorization': 'Basic ' + btoa('grader' + ":" + 'cse135Password')
        },
        body: JSON.stringify({
            "UserLeave": endTime
        })
    })
    .then(response => response.json())
    .then(data => {
        console.log("Success:", data);
    })
    .catch((error) => {
        console.error("Error:", error);
    })
}

/*
    Inactivity
*/

var timeoutId;
var breakStart;
var breakEnd;

function startTimer() {
    timeoutId = window.setTimeout(doInactive, 2000);
}

function doInactive() {
    var bS = new Date();
    breakStart = bS.getTime();
}

function resetTimer() {
    var bE = new Date();
    breakEnd = bE.getTime();


    let breakTime = 0;
    if (breakStart != 0) {
        breakTime = breakEnd - breakStart;
        if(!Number.isNaN(breakTime)) {
            putBreaks(breakTime, breakEnd);
        }
    }

    breakStart = 0;
    breakEnd = 0;
    window.clearTimeout(timeoutId)
    startTimer();
}

function setupTimers() {
    document.addEventListener("mousemove", resetTimer, false);
    document.addEventListener("keydown", resetTimer, false);
    document.addEventListener("keyup", resetTimer, false);
    document.addEventListener("click", resetTimer, false);
    document.addEventListener("wheel", resetTimer, false);

    startTimer();
}

setupTimers();

function putBreaks(breakTime, breakEnd) {

    let r = new Date();
    var breakEnd = breakEnd - r.setHours(0, 0, 0, 0);

    var breakString = "";
    fetch('https://cse135bpj.site/api/activity/' + cookieValue)
    .then(response => response.json())
    .then(data => {
        breakString = data[0].BreakTime;
        if(breakString === "") {
            breakString = breakTime;
        } else {
            breakString = breakString + ", " + breakTime;
        }

        breakString = '' + breakString;
        let breakArray = breakString.split(",");
        let newbreakString = "";


        if(breakArray.length > 11) {
            for(i=1; i < breakArray.length; i++) {
                if(newbreakString === "") {
                    newbreakString = breakArray[i];
                } else {
                    newbreakString = newbreakString + ", " + breakArray[i];
                }
            }
        } else {
            newbreakString = breakString;
        }

        return fetch('https://cse135bpj.site/api/activity/' + cookieValue, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': 'Basic ' + btoa('grader' + ":" + 'cse135Password')
            },
            body: JSON.stringify({
                "BreakEnd": breakEnd,
                "BreakTime": newbreakString
            })
        })
        .then(response => response.json())
        .then(data => {
            console.log("Success:", data);
        })
        .catch((error) => {
            console.error("Error:", error);
        });
    })
    .catch((error) => {
        console.error("Error:", error);
    })
}