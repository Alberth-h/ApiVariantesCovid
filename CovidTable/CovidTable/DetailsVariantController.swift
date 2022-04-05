//
//  DetailsVariantController.swift
//  CovidTable
//
//  Created by Usuario invitado on 17/1/22.
//  Copyright © 2022 Usuario invitado. All rights reserved.
//

import Foundation
import UIKit

class DetailsVariantController : UIViewController {
    var variant : Variant?
    
    @IBOutlet weak var lblDescription: UILabel!
    
    override func viewDidLoad() {
        lblDescription.text = variant!.description
    }
}
