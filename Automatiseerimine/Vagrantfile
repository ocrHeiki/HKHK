Vagrant.configure("2") do |config|

    # Debian 12 - DockerHost
    config.vm.define "HeiKi-DocKerHost" do |dockerhost|
      dockerhost.vm.box = "generic/debian12"
      dockerhost.vm.network "public_network"
      dockerhost.vm.network "private_network", ip: "10.10.10.130", virtualbox__intnet: "ansible_heikirebane"
      dockerhost.vm.hostname = "HeiKi-DocKerHost"
      dockerhost.vm.synced_folder "./ansible_data", "/vagrant_data"
      dockerhost.vm.provider :virtualbox do |vb|
        vb.customize ["modifyvm", :id, "--memory", "8192"]
        vb.customize ["modifyvm", :id, "--cpus", "4"]
        vb.name = "HeiKi-DocKerHost"
      end
      
      # Vajalikud Dockeri pakid
      dockerhost.vm.provision "shell", inline: <<-SHELL
        apt-get update
        apt-get install -y snmpd tmux mc wget tree git
        apt-get install -y apt-transport-https ca-certificates curl software-properties-common
        curl -fsSL https://download.docker.com/linux/debian/gpg | apt-key add -
        echo "deb [arch=amd64] https://download.docker.com/linux/debian $(lsb_release -cs) stable" > /etc/apt/sources.list.d/docker.list
        apt-get update
        apt-get install -y docker-ce docker-ce-cli containerd.io
      SHELL
    end
    
    # Debian 12 - ansible
    config.vm.define "HeiKi-AnsiBle" do |ansible|
      ansible.vm.box = "generic/debian12"
      ansible.vm.network "public_network"
      ansible.vm.network "private_network", ip: "10.10.10.131", virtualbox__intnet: "ansible_heikirebane"
      ansible.vm.hostname = "HeiKi-AnsiBle"
      ansible.vm.provider :virtualbox do |vb|
        vb.customize ["modifyvm", :id, "--memory", "4096"]
        vb.customize ["modifyvm", :id, "--cpus", "2"]
        vb.name = "HeiKi-AnsiBle"
      end
  
      # Vajalikud Ansible pakid
      ansible.vm.provision "shell", inline: <<-SHELL
        apt-get update
        apt-get install -y snmpd tmux mc wget tree git
        apt-get install -y software-properties-common
        add-apt-repository ppa:ansible/ansible -y
        apt-get update
        apt-get install -y ansible sshpass yamllint ansible-lint
      SHELL
    end
    
    # Ubuntu 24.04
    config.vm.define "HeiKi-UbunTu" do |ubuntu|
      ubuntu.vm.box = "bento/ubuntu-24.04"
      ubuntu.vm.network "public_network"
      ubuntu.vm.network "private_network", ip: "10.10.10.132", virtualbox__intnet: "ansible_heikirebane"
      ubuntu.vm.hostname = "HeiKi-UbunTu"
      ubuntu.vm.provider :virtualbox do |vb|
        vb.customize ["modifyvm", :id, "--memory", "4096"]
        vb.customize ["modifyvm", :id, "--cpus", "2"]
        vb.name = "HeiKi-UbunTu"
      end
      
      # Vajalikud Ubuntu pakid
      ubuntu.vm.provision "shell", inline: <<-SHELL
        apt-get update
        apt-get install -y snmpd tmux mc wget tree git
      SHELL
    end
  
    # Centos Stream 9
    config.vm.define "HeiKi-CenTos" do |centos|
      centos.vm.box = "generic/centos9s"
      centos.vm.network "public_network"
      centos.vm.network "private_network", ip: "10.10.10.133", virtualbox__intnet: "ansible_heikirebane"
      centos.vm.hostname = "HeiKi-CenTos"
      centos.vm.provider :virtualbox do |vb|
        vb.customize ["modifyvm", :id, "--memory", "4096"]
        vb.customize ["modifyvm", :id, "--cpus", "2"]
        vb.name = "HeiKi-CenTos"
      end
  
      # Vajalikud Centos pakid
      centos.vm.provision "shell", inline: <<-SHELL
        yum update -y
        yum install -y net-snmpd net-snmpd-utils tmux mc wget tree git
      SHELL
    end
  
    # OpenSuSE
    config.vm.define "HeiKi-OpenSuSE" do |opensuse|
      opensuse.vm.box = "alvistack/opensuse-leap-15.6"
      opensuse.vm.network "public_network"
      opensuse.vm.network "private_network", ip: "10.10.10.134", virtualbox__intnet: "ansible_heikirebane"
      opensuse.vm.hostname = "HeiKi-OpenSuSE"
      opensuse.vm.provider :virtualbox do |vb|
        vb.customize ["modifyvm", :id, "--memory", "4096"]
        vb.customize ["modifyvm", :id, "--cpus", "2"]
        vb.name = "HeiKi-OpenSuSE"
      end
  
      # Vajalikud OpenSuSE pakid
      opensuse.vm.provision "shell", inline: <<-SHELL
        zypper refresh
        zypper install -y net-snmp tmux mc wget tree git
      SHELL
    end
  end
