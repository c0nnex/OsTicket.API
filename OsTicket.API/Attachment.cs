﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace OsTicket.API
{
    public class Attachment
    {
        public string Name { get; set; }
        public string Type { get; set; }
        public byte[] Content { get; set; }
    }
}
