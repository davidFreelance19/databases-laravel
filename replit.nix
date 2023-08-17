{ pkgs }: {
	deps = [
		pkgs.nodePackages.prettier
		pkgs.php80
        pkgs.php80Packages.composer
	];
}