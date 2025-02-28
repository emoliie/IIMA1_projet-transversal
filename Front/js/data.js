const leaderboard = document.getElementById("leaderboard");

async function getPlayer() {
  const response = await fetch("http://127.0.0.1:3000/game", {
    method: "GET",
  });

  const result = await response.json();

  createPlayerInfo(result);
}

getPlayer();

function createPlayerInfo(games) {
  games.forEach((game, index) => {
    const li = document.createElement("li");
    const player = `
    <p class="rank">${index + 1}</p>
    <div id="player">
        <p class="player-name">${game.player}</p>
        <p class="player-score">${game.score}</p>
    </div>
  `;
    li.innerHTML = player;
    leaderboard.appendChild(li);
  });
}
