// var ctx = document.getElementById('chart').getContext('2d');

const data = {
  labels: ['Media', 'Document', 'Apps'],
  datasets: [
    {
      label: 'Storage',
      data: [
        '16812',
        '25153',
        '800'
      ],
      backgroundColor: [
        '#ffc0ca',
        '#dec1f2',
        '#f9d89c'
      ]
    }
  ]
};

const config = {
  type: 'doughnut',
  data: data,
  options: {
    responsive: true,
    plugins: {
      legend: {
        display: false
      },
      title: {
        display: false
      },
      tooltip:{
        enabled:false
      }
    }
  }
};

var btn = document.querySelector("#students > div > label")

var btn_left = getOffset(btn).left

console.log(btn_left);
function getOffset(el) {
  const rect = el.getBoundingClientRect();
  return {
    left: rect.left + window.scrollX,
    top: rect.top + window.scrollY
  };
}

_width = document.querySelector("#textView").style.width

document.querySelector("#students > div > div").style.left=(_width+150)+'px';
function hidestats (value){
  console.log(value);
  if(value == "true" ){
    
    document.querySelector("body > section > main > section > div.clouds").style.display="flex"
    document.querySelector("body > section > main > section > div.more-memory > button").value="false" 
    document.querySelector("body > section > main > section > div.more-memory > button").innerHTML = "hide"
  }else if(value == "false" ){
    document.querySelector("body > section > main > section > div.clouds").style.display="none"
    document.querySelector("body > section > main > section > div.more-memory > button").value="true"
    document.querySelector("body > section > main > section > div.more-memory > button").innerHTML = "show statistics"
  }
}

// var chart = new Chart(ctx, config);