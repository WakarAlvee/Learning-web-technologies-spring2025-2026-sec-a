let currentPlayer = "X";
let board = ["", "", "", "", "", "", "", "", ""];
let xScore = 0;
let oScore = 0;
let isGameActive = true;

// The 8 ways to win
const winPatterns = [
    [0, 1, 2], [3, 4, 5], [6, 7, 8], // Horizontal
    [0, 3, 6], [1, 4, 7], [2, 5, 8], // Vertical
    [0, 4, 8], [2, 4, 6]             // Diagonal
];

function handleMove(index) {
    // Check if cell is empty and game is still going
    if (board[index] === "" && isGameActive) {
        board[index] = currentPlayer;
        document.getElementById("c" + index).innerText = currentPlayer;
        
        checkResult();
    }
}

function checkResult() {
    let won = false;

    // Check each pattern
    for (let i = 0; i < winPatterns.length; i++) {
        const [a, b, c] = winPatterns[i];
        if (board[a] !== "" && board[a] === board[b] && board[a] === board[c]) {
            won = true;
            break;
        }
    }

    if (won) {
        document.getElementById("status").innerText = "Player " + currentPlayer + " Wins!";
        updateScore(currentPlayer);
        isGameActive = false;
    } else if (!board.includes("")) {
        document.getElementById("status").innerText = "It's a Draw!";
        isGameActive = false;
    } else {
        // Switch Player
        currentPlayer = (currentPlayer === "X") ? "O" : "X";
        document.getElementById("status").innerText = "Player " + currentPlayer + "'s Turn";
    }
}

function updateScore(winner) {
    if (winner === "X") {
        xScore++;
        document.getElementById("x-wins").innerText = xScore;
    } else {
        oScore++;
        document.getElementById("o-wins").innerText = oScore;
    }
}

function reset() {
    board = ["", "", "", "", "", "", "", "", ""];
    currentPlayer = "X";
    isGameActive = true;
    document.getElementById("status").innerText = "Player X's Turn";
    
    // Clear all cells in the UI
    for (let i = 0; i < 9; i++) {
        document.getElementById("c" + i).innerText = "";
    }
}