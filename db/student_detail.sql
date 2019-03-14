using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Student_info
{
    #region Student_detail
    public class Student_detail
    {
        #region Member Variables
        protected string _uname;
        protected string _email;
        protected string _pass;
        protected string _fname;
        protected string _gender;
        protected int _cnumber;
        #endregion
        #region Constructors
        public Student_detail() { }
        public Student_detail(string email, string pass, string fname, string gender, int cnumber)
        {
            this._email=email;
            this._pass=pass;
            this._fname=fname;
            this._gender=gender;
            this._cnumber=cnumber;
        }
        #endregion
        #region Public Properties
        public virtual string Uname
        {
            get {return _uname;}
            set {_uname=value;}
        }
        public virtual string Email
        {
            get {return _email;}
            set {_email=value;}
        }
        public virtual string Pass
        {
            get {return _pass;}
            set {_pass=value;}
        }
        public virtual string Fname
        {
            get {return _fname;}
            set {_fname=value;}
        }
        public virtual string Gender
        {
            get {return _gender;}
            set {_gender=value;}
        }
        public virtual int Cnumber
        {
            get {return _cnumber;}
            set {_cnumber=value;}
        }
        #endregion
    }
    #endregion
}