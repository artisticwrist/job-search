
        var counters = [
            { current: 0, max: 3000 },
            { current: 0, max: 100 },
            { current: 0, max: 1000 },
            { current: 0, max: 500 }
        ];
        var duration = 1500; 
        var refreshInterval = 3000; 

        function updateCounter(index) {
            var counterElement = document.getElementById(`counter${index}`);
            var counterData = counters[index - 1];
            var startTime = new Date().getTime();
            var updateInterval = setInterval(function () {
                var currentTime = new Date().getTime();
                var elapsed = currentTime - startTime;
                if (elapsed < duration) {
                    var increment = Math.floor((elapsed / duration) * counterData.max);
                    counterElement.innerText = increment;
                } else {
                    counterElement.innerText = counterData.max;
                    clearInterval(updateInterval);
                    setTimeout(() => resetCounter(index), refreshInterval);
                }
            }, 100);
        }

        function resetCounter(index) {
            counters[index - 1].current = 0;
            updateCounter(index);
        }

        for (var i = 1; i <= 4; i++) {
            updateCounter(i);
        }