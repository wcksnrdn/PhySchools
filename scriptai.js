async function askQuestion() {
    const userInput = document.getElementById('userInput').value;

    if (!userInput) {
        alert('Harap masukkan pertanyaan.');
        return;
    }

    console.log('Sending request with prompt:', userInput);

    try {
        const response = await fetch('http://localhost:3000/api/openai', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                prompt: userInput,
                max_tokens: 150
            })
        });

        if (response.ok) {
            const data = await response.json();
            console.log('Received response:', data);

            const answer = data.choices && data.choices[0] && data.choices[0].text.trim();

            if (answer) {
                document.getElementById('answer').innerHTML = answer;
            } else {
                document.getElementById('answer').innerHTML = 'Tidak ada jawaban yang diterima dari API.';
            }
        } else {
            document.getElementById('answer').innerHTML = 'Terjadi kesalahan saat meminta jawaban.';
            console.error('Error response status:', response.status);
        }
    } catch (error) {
        console.error('Error:', error);
        document.getElementById('answer').innerHTML = 'Terjadi kesalahan saat meminta jawaban.';
    }
}
