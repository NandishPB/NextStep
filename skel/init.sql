create table users if not exists (
	fname varcahr(100),
	uname varchar(32),
	pwhash varchar(256),
	footprint varchar(192)
);
