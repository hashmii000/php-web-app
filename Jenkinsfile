pipeline {
    agent any

    stages {

        stage('Checkout Code') {
            steps {
                git branch: 'main',
                url: 'https://github.com/hashmii000/php-web-app.git'
            }
        }

        stage('Stop Old Containers') {
            steps {
                bat 'docker compose down'
            }
        }

        stage('Build & Deploy') {
            steps {
                bat 'docker compose up --build -d'
            }
        }

        stage('Verify Running') {
            steps {
                bat 'docker ps'
            }
        }
    }
}