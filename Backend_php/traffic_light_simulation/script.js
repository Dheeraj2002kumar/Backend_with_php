// document.addEventListener('DOMContentLoaded', () => {
//   const startButton = document.getElementById('start-button');
//   const stopButton = document.getElementById('stop-button');
//   const stopwatchDisplay = document.getElementById('stopwatch');
//   const trafficLights = [
//       document.getElementById('traffic-light-1'),
//       document.getElementById('traffic-light-2'),
//       document.getElementById('traffic-light-3'),
//       document.getElementById('traffic-light-4')
//   ];
  
//   let stopwatchInterval, lightInterval;
//   let seconds = 0;
//   let currentLight = 0;
  
//   function updateStopwatch() {
//       seconds++;
//       let mins = Math.floor(seconds / 60);
//       let secs = seconds % 60;
//       stopwatchDisplay.textContent = `${mins.toString().padStart(2, '0')}:${secs.toString().padStart(2, '0')}`;
//   }
  
//   function changeLights() {
//       trafficLights.forEach((light, index) => {
//           const redLight = light.querySelector('.light.red');
//           const yellowLight = light.querySelector('.light.yellow');
//           const greenLight = light.querySelector('.light.green');
          
//           if (index === currentLight) {
//               redLight.style.backgroundColor = 'grey';
//               yellowLight.style.backgroundColor = 'grey';
//               greenLight.style.backgroundColor = 'green';
//           } else if (index === (currentLight + 1) % trafficLights.length) {
//               redLight.style.backgroundColor = 'grey';
//               yellowLight.style.backgroundColor = 'yellow';
//               greenLight.style.backgroundColor = 'grey';
//           } else {
//               redLight.style.backgroundColor = 'red';
//               yellowLight.style.backgroundColor = 'grey';
//               greenLight.style.backgroundColor = 'grey';
//           }
//       });
//       currentLight = (currentLight + 1) % trafficLights.length;
//   }
  
//   startButton.addEventListener('click', () => {
//       if (!stopwatchInterval && !lightInterval) {
//           stopwatchInterval = setInterval(updateStopwatch, 1000);
//           lightInterval = setInterval(changeLights, 15000);
//           changeLights();
//       }
//   });
  
//   stopButton.addEventListener('click', () => {
//       clearInterval(stopwatchInterval);
//       clearInterval(lightInterval);
//       stopwatchInterval = null;
//       lightInterval = null;
//   });
// });


//---------------------------------------------------------

// stop watch will start in reverse loop
// traffic lights will change every 15 seconds
// stopwatch will update every 1 second

document.addEventListener('DOMContentLoaded', () => {
    const startButton = document.getElementById('start-button');
    const stopButton = document.getElementById('stop-button');
    const stopwatchDisplay = document.getElementById('stopwatch');
    const trafficLights = [
        document.getElementById('traffic-light-1'),
        document.getElementById('traffic-light-2'),
        document.getElementById('traffic-light-3'),
        document.getElementById('traffic-light-4')
    ];

    let stopwatchInterval, lightInterval;
    let remainingTime = 15; // Set the initial countdown time to 15 seconds
    let currentLight = 0;

    function updateStopwatch() {
        remainingTime--;
        if (remainingTime < 0) {
            remainingTime = 15; // Reset the timer
            changeLights(); // Change the traffic light when the timer resets
        }
        let mins = Math.floor(remainingTime / 60);
        let secs = remainingTime % 60;
        stopwatchDisplay.textContent = `${mins.toString().padStart(2, '0')}:${secs.toString().padStart(2, '0')}`;
    }

    function changeLights() {
        trafficLights.forEach((light, index) => {
            const redLight = light.querySelector('.light.red');
            const yellowLight = light.querySelector('.light.yellow');
            const greenLight = light.querySelector('.light.green');

            if (index === currentLight) {
                redLight.style.backgroundColor = 'grey';
                yellowLight.style.backgroundColor = 'grey';
                greenLight.style.backgroundColor = 'green';
            } else if (index === (currentLight + 1) % trafficLights.length) {
                redLight.style.backgroundColor = 'grey';
                yellowLight.style.backgroundColor = 'yellow';
                greenLight.style.backgroundColor = 'grey';
            } else {
                redLight.style.backgroundColor = 'red';
                yellowLight.style.backgroundColor = 'grey';
                greenLight.style.backgroundColor = 'grey';
            }
        });
        currentLight = (currentLight + 1) % trafficLights.length;
    }

    startButton.addEventListener('click', () => {
        if (!stopwatchInterval) {
            remainingTime = 15; // Reset the timer to 15 seconds when started
            stopwatchInterval = setInterval(updateStopwatch, 1000);
            changeLights(); // Immediately change lights on start
        }
    });

    stopButton.addEventListener('click', () => {
        clearInterval(stopwatchInterval);
        stopwatchInterval = null;
    });
});



