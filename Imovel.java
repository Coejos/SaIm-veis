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
public class Imovel extends Endereco
{
    int qntQt,uniCons;
    String status;
    
    
   /* public Imovel(int qq,int uc, String st)
    {
        this.qntQt=qq;
        this.uniCons=uc;
        this.status=st;
        
    }*/

    public Imovel(String r, String b, String c, int n, int ce)
    {
        super(r, b, c, n, ce);
    }
    
}
