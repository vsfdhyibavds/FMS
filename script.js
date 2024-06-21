document.addEventListener('DOMContentLoaded', function() {
    const viewFarmData = document.getElementById('view-farm-data');
    const addFarmData = document.getElementById('add-farm-data');
    const farmDataSection = document.getElementById('farm-data');
    const addDataSection = document.getElementById('add-data');
    const dataContainer = document.getElementById('data-container');
  
    viewFarmData.addEventListener('click', function() {
      fetch('get_data.php')
        .then(response => response.json())
        .then(data => {
          dataContainer.innerHTML = '';
          data.forEach(item => {
            const div = document.createElement('div');
            div.textContent = `${item.type}: ${item.value}`;
            dataContainer.appendChild(div);
          });
        });
      farmDataSection.style.display = 'block';
      addDataSection.style.display = 'none';
    });
  
    addFarmData.addEventListener('click', function() {
      farmDataSection.style.display = 'none';
      addDataSection.style.display = 'block';
    });
  });
  