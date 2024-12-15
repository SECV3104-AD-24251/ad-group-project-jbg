from flask import Flask, render_template
from googleapiclient.discovery import build
from google.oauth2.credentials import Credentials
import pickle

app = Flask(__name__)

def load_credentials():
    # Make sure the 'token.pickle' file is in the correct directory
    try:
        with open('token.pickle', 'rb') as token:
            creds = pickle.load(token)
    except FileNotFoundError:
        print("Token file not found. Please authenticate first.")
        creds = None
    return creds

# Function to fetch calendar events
def get_calendar_events():
    creds = load_credentials()
    service = build('calendar', 'v3', credentials=creds)

    # Get the list of events from the primary calendar
    events = service.events().list(
        calendarId='primary', timeMin='2024-01-01T00:00:00Z', maxResults=10, singleEvents=True,
        orderBy='startTime').execute()

    return events['items']

@app.route('/')
def index():
    events = get_calendar_events()
    print(events)  # Print events to the console
    return render_template('calendar.html', events=events)


if __name__ == '__main__':
    app.run(debug=True)
