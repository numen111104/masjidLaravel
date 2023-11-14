function updateClock() {
    const now = new Date();
    const hours = now.getHours().toString().padStart(2, '0');
    const minutes = now.getMinutes().toString().padStart(2, '0');
    const seconds = now.getSeconds().toString().padStart(2, '0');
    const timeString = `${hours}:${minutes}:${seconds}`;
    document.getElementById('clock').textContent = timeString;
  }
  setInterval(updateClock, 1000);
  updateClock();

  // script.js
const tanggalElement = document.getElementById('tanggal');
function tampilkanTanggal() {
    const tanggalSekarang = new Date();
    const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
    const tanggalFormatted = tanggalSekarang.toLocaleString('id-ID', options);
    tanggalElement.textContent = tanggalFormatted;
}
tampilkanTanggal();
