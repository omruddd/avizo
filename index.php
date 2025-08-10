<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Undangan Digital</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet" />
  <style>
    body {
      margin: 0;
      font-family: "Poppins", sans-serif;
      color: #333;
      background-color: #f9f9f9;
    }
    header {
      background: url('https://picsum.photos/seed/wedding/1600/900') center/cover no-repeat;
      height: 60vh;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-shadow: 0 2px 8px rgba(0,0,0,0.5);
    }
    header h1 {
      font-size: 3rem;
      margin: 0;
    }
    section {
      padding: 2rem 1rem;
      max-width: 800px;
      margin: auto;
    }
    .countdown {
      display: flex;
      justify-content: center;
      gap: 1rem;
      font-size: 1.5rem;
    }
    .countdown div {
      text-align: center;
      background: #fff;
      padding: 1rem;
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }
    form {
      display: flex;
      flex-direction: column;
      gap: 1rem;
      margin-top: 2rem;
    }
    input, textarea, button {
      padding: 0.75rem;
      border-radius: 4px;
      border: 1px solid #ccc;
      font-size: 1rem;
    }
    button {
      background-color: #007bff;
      color: #fff;
      cursor: pointer;
      border: none;
    }
    button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <header>
    <h1>Ayu &amp; Budi</h1>
  </header>

  <section>
    <h2>Undangan Pernikahan</h2>
    <p>Dengan hormat kami mengundang Anda untuk menghadiri acara pernikahan kami.</p>
    <p><strong>Tanggal:</strong> 1 Januari 2025</p>
    <p><strong>Lokasi:</strong> Jakarta, Indonesia</p>

    <div class="countdown" id="countdown">
      <div><span id="days">0</span><br/>Hari</div>
      <div><span id="hours">0</span><br/>Jam</div>
      <div><span id="minutes">0</span><br/>Menit</div>
      <div><span id="seconds">0</span><br/>Detik</div>
    </div>

    <form>
      <label>
        Nama:
        <input type="text" name="nama" required />
      </label>
      <label>
        Pesan:
        <textarea name="pesan" rows="4" required></textarea>
      </label>
      <button type="submit">Kirim RSVP</button>
    </form>
  </section>

  <script>
    const eventDate = new Date('2025-01-01T08:00:00+07:00');
    const daysEl = document.getElementById('days');
    const hoursEl = document.getElementById('hours');
    const minutesEl = document.getElementById('minutes');
    const secondsEl = document.getElementById('seconds');

    function updateCountdown() {
      const now = new Date();
      const diff = eventDate - now;
      if (diff <= 0) {
        daysEl.textContent = hoursEl.textContent = minutesEl.textContent = secondsEl.textContent = '0';
        clearInterval(interval);
        return;
      }
      const days = Math.floor(diff / (1000 * 60 * 60 * 24));
      const hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
      const minutes = Math.floor((diff / (1000 * 60)) % 60);
      const seconds = Math.floor((diff / 1000) % 60);
      daysEl.textContent = days;
      hoursEl.textContent = hours;
      minutesEl.textContent = minutes;
      secondsEl.textContent = seconds;
    }

    updateCountdown();
    const interval = setInterval(updateCountdown, 1000);
  </script>
</body>
</html>
