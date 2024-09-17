class ClickerGame {
    constructor() {
        this.clickCount = 0;
        this.score = 0;
        this.level = 1;
        this.bonus = 0;
        this.penalty = 0;
        this.button = document.getElementById('clicker-button');
        this.clickCountElement = document.getElementById('click-count');
        this.scoreElement = document.getElementById('score');
        this.bonusElement = document.getElementById('bonus');
        this.penaltyElement = document.getElementById('penalty');
        this.resultElement = document.getElementById('result');
        this.timerElement = document.getElementById('timer');

        this.button.addEventListener('click', this.handleClick.bind(this));
        document.addEventListener('click', this.handleGlobalClick.bind(this));

        this.timeLeft = 10;
        this.gameOverFlag = false;
        this.updateTimer();
    }

    handleClick() {
        if (!this.gameOverFlag) {
            this.clickCount++;
            this.score += 10; // 10 очков за каждый клик
            this.checkBonus();
            this.updateUI();
        }
    }

    handleGlobalClick(event) {
        if (!this.gameOverFlag && event.target !== this.button) {
            this.penalty += 50; // Штраф 50 очков за клик вне кнопки
            this.updateUI();
        }
    }

    checkBonus() {
        if (this.clickCount % 10 === 0) {
            this.bonus += 50;
            alert('Бонус +50 очков!');
        }
    }

    updateUI() {
        this.clickCountElement.innerText = `Кликов: ${this.clickCount}`;
        this.scoreElement.innerText = `Очки: ${this.score}`;
        this.bonusElement.innerText = `Бонус: ${this.bonus}`;
        this.penaltyElement.innerText = `Штраф: ${this.penalty}`;
    }

    updateTimer() {
        if (this.timeLeft > -1 && !this.gameOverFlag) {
            this.timerElement.innerText = `Время: ${this.timeLeft} секунд`;
            this.timeLeft--;
            setTimeout(this.updateTimer.bind(this), 1000);
        } else {
            this.gameOver();
        }
    }

    gameOver() {
        this.gameOverFlag = true;
        const finalScore = this.score + this.bonus - this.penalty;
        this.resultElement.innerText = `Игра окончена. Окончательный счет: ${finalScore}`;
        this.button.disabled = true;
    }
}

const game = new ClickerGame();
