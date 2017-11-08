/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package saimoveis;

/**
 *
 * @author 201504940033
 */
public abstract class Endereco 
{
    String rua,bairro,cidade;
    int num,cep;
    
    
    public Endereco(String r, String b, String c, int n,int ce)
    {
        
        this.rua=r;
        this.bairro=b;
        this.cidade=c;
        this.num=n;
        this.cep=ce;
        
    }
}
