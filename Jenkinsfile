pipeline {
    agent any

    stages {
        stage('Clone Code') {
            steps {
                git branch: 'main', url: 'https://github.com/priyankakapoor12/php-app.git'
            }
        }

        stage('Deploy') {
            steps {
                sh '''
                cd /var/www/html
                git pull origin main
                sudo systemctl restart apache2
                '''
            }
        }
    }
}
