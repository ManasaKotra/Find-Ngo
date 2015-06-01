$script = <<SCRIPT
apt-get update
echo "Y" | apt-get install nodejs 
node --version
ln -fs /vagrant /home/vagrant/Find-ngo
SCRIPT

Vagrant.configure("2") do |config|
  config.vm.box = "base"
  config.vm.box_url = "http://files.vagrantup.com/precise32.box"
  config.vm.provision :shell, :inline => $script
  config.vm.network :forwarded_port, host: 3000, guest: 3000
end
