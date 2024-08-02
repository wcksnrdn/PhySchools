const express = require('express');
const axios = require('axios');
const app = express();
const port = 3000;

const apiKey = 'sk-proj-M1tpyqwYBh6bE1wDRgswT3BlbkFJnCFkH4Rv1uERHJqqCRmD'; // Ganti dengan API key Anda

app.use(express.json());

app.post('/api/openai', async (req, res) => {
    const { prompt, max_tokens } = req.body;
    console.log('Received request:', { prompt, max_tokens }); // Logging request

    try {
        const response = await axios.post(
            'https://api.openai.com/v1/engines/davinci-codex/completions',
            {
                prompt,
                max_tokens
            },
            {
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': `Bearer ${apiKey}`
                }
            }
        );
        console.log('API response:', response.data); // Logging response
        res.json(response.data);
    } catch (error) {
        console.error('Error:', error); // Logging error
        res.status(500).send('Something went wrong');
    }
});

app.listen(port, () => {
    console.log(`Server is running on http://localhost:${port}`);
});
