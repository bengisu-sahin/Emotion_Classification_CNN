import sys
import base64
import matplotlib.pyplot as plt
from tensorflow.keras.preprocessing.sequence import pad_sequences
import pickle
from tensorflow.keras.models import load_model
from io import BytesIO

def predict(text, model_path, token_path):
    model = load_model(model_path)

    with open(token_path, 'rb') as f:
        tokenizer = pickle.load(f)

    sequences = tokenizer.texts_to_sequences([text])
    x_new = pad_sequences(sequences, maxlen=50)
    predictions = model.predict([x_new, x_new])

    emotions = {0: 'anger', 1: 'fear', 2: 'joy', 3: 'love', 4: 'sadness', 5: 'surprise'}

    label = list(emotions.values())
    probs = list(predictions[0])
    labels = label
    plt.subplot(1, 1, 1)
    bars = plt.barh(labels, probs)
    plt.xlabel('Probability', fontsize=15)
    ax = plt.gca()
    ax.bar_label(bars, fmt='%.2f')

    # Save the plot to a BytesIO object
    buffer = BytesIO()
    plt.savefig(buffer, format='png')
    buffer.seek(0)
    plt.savefig('result_plot.png')
    plt.close()

    # Encode the plot as base64
    result_image_base64 = base64.b64encode(buffer.getvalue()).decode('utf-8')

    return result_image_base64

# Get the text from the command line argument
text = sys.argv[1]

# Call your predict function
result_plot = predict(text, 'nlp.h5', 'tokenizer.pkl')

# Print the base64-encoded image to the standard output
print(result_plot)
