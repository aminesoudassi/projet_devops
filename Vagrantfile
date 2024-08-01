Vagrant.configure("2") do |config|
  # Configuration de la machine de test
  config.vm.define "test" do |test|
    test.vm.box = "ubuntu/bionic64"
    test.vm.network "private_network", ip: "192.168.33.10"
    test.vm.hostname = "test-env"
    test.vm.provider "virtualbox" do |vb|
      vb.memory = "1024"
    end
  end

  # Configuration de la machine de production
  config.vm.define "prod" do |prod|
    prod.vm.box = "ubuntu/bionic64"
    prod.vm.network "private_network", ip: "192.168.33.11"
    prod.vm.hostname = "prod-env"
    prod.vm.provider "virtualbox" do |vb|
      vb.memory = "1024"
    end
  end
end
