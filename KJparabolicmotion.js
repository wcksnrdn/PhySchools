const express = require('express');
const path = require('path');
const bodyParser = require('body-parser');
const app = express();
const port = process.env.PORT || 3000;

app.use(express.static(path.join(__dirname, 'PROJEK')));
app.use(bodyParser.json());

const correctAnswers = {
    q1: 'c',
    q2: 'a',
    q3: 'a',
    q4: 'a',
    q5: 'a',
    q6: 'b',
    q7: 'c',
    q8: 'a',
    q9: 'a',
    q10: 'b'
};

app.post('/submit', (req, res) => {
    const userAnswers = req.body.answers;
    let score = 0;

    for (let question in correctAnswers) {
        if (userAnswers[question] === correctAnswers[question]) {
            score++;
        }
    }

    res.json({ score: score });
});

app.get('/', (req, res) => {
    res.sendFile(path.join(__dirname, 'PROJEK', 'examparabolicmotion.html'));
});

app.listen(port, () => {
    console.log(`Server running at http://localhost:${port}`);
});
