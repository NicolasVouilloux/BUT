package com.sillyash.but.tp1;

public class Product {
    protected String name;
    protected double price;

    public Product(String name, double price) {
        this.name = name;
        this.price = price;
    }

    public String getName() { return this.name; }
    public double getPrice() { return this.price; }
}
