from googleapiclient.discovery import build
from google_auth_oauthlib.flow import InstalledAppFlow
from google.auth.transport.requests import Request
import os
import pickle

# Define the scopes for the Google Calendar API
SCOPES = ['https://www.googleapis.com/auth/calendar']

def main():
    print("Starting Google Calendar API authentication...")
    creds = None

    # Check if token.pickle exists for previously authenticated sessions
    if os.path.exists('token.pickle'):
        print("Loading existing credentials...")
        with open('token.pickle', 'rb') as token:
            creds = pickle.load(token)

    # Authenticate if no valid credentials are available
    if not creds or not creds.valid:
        if creds and creds.expired and creds.refresh_token:
            print("Refreshing credentials...")
            creds.refresh(Request())
        else:
            print("Starting new authentication flow...")
            flow = InstalledAppFlow.from_client_secrets_file(
                'credentials.json', SCOPES)
            print("Starting the OAuth flow...")
            creds = flow.run_local_server(port=9090)
  



        # Save the credentials for the next session
        with open('token.pickle', 'wb') as token:
            print("Saving credentials to token.pickle...")
            pickle.dump(creds, token)

    print("Authentication successful!")
    
    # Build the Calendar API service
    service = build('calendar', 'v3', credentials=creds)

    print("Fetching the list of calendars...")
    calendar_list = service.calendarList().list().execute()

    # Print calendar names
    for calendar in calendar_list['items']:
        print(f"Calendar: {calendar['summary']}")

if __name__ == '__main__':
    main()
