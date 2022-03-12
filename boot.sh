echo "MULTISITE_KEYS=www" >> /etc/environment
echo "GITHUB_TOKEN=$GITHUB_TOKEN" >> /etc/environment
echo "AWS_ACCESS_KEY_ID=$AWS_ACCESS_KEY_ID" >> /etc/environment
echo "AWS_SECRET_ACCESS_KEY=$AWS_SECRET_ACCESS_KEY" >> /etc/environment
echo "AWS_DEFAULT_REGION=$AWS_DEFAULT_REGION" >> /etc/environment

git clone --quiet https://$GITHUB_TOKEN:x-oauth-basic@github.com/fsulib/drupal9_deployment /drupal9_deployment >> /root/build.log 2>&1
/drupal9_deployment/build/vagrant.sh >> /root/build.log 2>&1
