using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Laravel
{
    #region Tasks
    public class Tasks
    {
        #region Member Variables
        protected unknown _id;
        protected unknown _created_at;
        protected unknown _updated_at;
        protected string _task;
        #endregion
        #region Constructors
        public Tasks() { }
        public Tasks(unknown created_at, unknown updated_at, string task)
        {
            this._created_at=created_at;
            this._updated_at=updated_at;
            this._task=task;
        }
        #endregion
        #region Public Properties
        public virtual unknown Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual unknown Created_at
        {
            get {return _created_at;}
            set {_created_at=value;}
        }
        public virtual unknown Updated_at
        {
            get {return _updated_at;}
            set {_updated_at=value;}
        }
        public virtual string Task
        {
            get {return _task;}
            set {_task=value;}
        }
        #endregion
    }
    #endregion
}