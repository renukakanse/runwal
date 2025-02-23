from flask import Flask, request, jsonify
import google.generativeai as genai 

app = Flask(__name__)

# Configure Google Gemini AI
genai.configure(api_key="AIzaSyDfk9RZiQGGjjAxhb9u2CKheW98uAJwC6s")  # Replace with actual API key

# AI Model Configuration
generation_config = {
    "temperature": 0.7,
    "top_p": 0.95,
    "top_k": 40,
    "max_output_tokens": 512,
}

model = genai.GenerativeModel(model_name="gemini-1.5-flash", generation_config=generation_config)
chat_session = model.start_chat(history=[])

@app.route('/chat', methods=['POST'])
def chat():
    user_message = request.json.get('message')
    if not user_message:
        return jsonify({'reply': "Please enter a message."})

    response = chat_session.send_message(user_message)
    bot_reply = response.text if hasattr(response, 'text') else "Sorry, I couldn't process that."
    
    return jsonify({'reply': bot_reply})

if __name__ == '__main__':
    app.run(debug=True)
