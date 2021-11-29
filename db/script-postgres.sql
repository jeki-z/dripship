CREATE TABLE customers(
id serial,
name VARCHAR(64) NOT NULL,
address VARCHAR(200) NOT NULL,
pcode VARCHAR(10) NOT NULL,
phone_number VARCHAR(13) NOT NULL,
CONSTRAINT customers_id_PK PRIMARY KEY(id)
);

CREATE TABLE orders(
id serial,
sender_id INT NOT NULL,
recipient_id INT NOT NULL,
item_type VARCHAR(20) NOT NULL,
item_qty INT NOT NULL,
order_date DATE NOT NULL,
shipment_type VARCHAR(20) NOT NULL,
CONSTRAINT order_sender_FK FOREIGN KEY(sender_id) REFERENCES customers(id),
CONSTRAINT order_recipient_FK FOREIGN KEY(recipient_id) REFERENCES customers(id),
CONSTRAINT orders_id_PK PRIMARY KEY(id)
);

CREATE TABLE courier(
id serial,
name VARCHAR(64) NOT NULL,
CONSTRAINT courier_id_PK PRIMARY KEY(id)
);

CREATE TABLE shipment(
id serial,
courier_id INT NOT NULL,
order_id INT NOT NULL,
shipment_date DATE NOT NULL,
shipment_status VARCHAR(20) NOT NULL,
CONSTRAINT shipment_courier_id_FK FOREIGN KEY(courier_id) REFERENCES courier(id),
CONSTRAINT shipment_order_id_FK FOREIGN KEY(order_id) REFERENCES orders(id)
);



''' contoh input data '''
INSERT INTO customers (name,address,pcode,phone_number)
VALUES('ini nama','ini alamat', '12345', '012345678912');

INSERT INTO orders (sender_id,recipient_id,item_type,item_qty,order_date,shipment_type)
VALUES(1,2,'elektronik',1,'10-Oct-2021','Regular');

INSERT INTO courier (name) VALUES('kurir 1');

INSERT INTO shipment (courier_id, order_id, shipment_date, shipment_status)
VALUES(1,1,'5-Dec-2021','Belum dikirim');
