"use client";

import { useState, useEffect } from 'react';
import * as fcl from "@onflow/fcl";

export default function Home() {
  const [user, setUser] = useState({ loggedIn: false });
  const [bountyData, setBountyData] = useState(null);

  useEffect(() => {
    fcl.currentUser.subscribe(setUser);
  }, []);

  const getBountyData = async () => {
    try {
      const response = await fcl.query({
        cadence: `
          import BountyContract from 0xBountyContract

          pub fun main(address: Address): BountyContract.Bounty? {
            return BountyContract.getBounty(address: address)
          }
        `,
        args: (arg, t) => [arg("0x9d2ade18cb6bea1a", t.Address)]
      });
      setBountyData(response);
    } catch (error) {
      console.error("Error fetching bounty:", error);
    }
  };

  return (
    <div className="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
      <div className="relative py-3 sm:max-w-xl sm:mx-auto">
        <div className="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
          <div className="max-w-md mx-auto">
            <div className="divide-y divide-gray-200">
              <div className="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                <h1 className="text-2xl font-bold mb-4">Flow Bounty DApp</h1>
                {!user.loggedIn ? (
                  <button
                    onClick={fcl.authenticate}
                    className="bg-blue-500 text-white px-4 py-2 rounded"
                  >
                    Connect Wallet
                  </button>
                ) : (
                  <div>
                    <p>Connected Address: {user?.addr}</p>
                    <button
                      onClick={fcl.unauthenticate}
                      className="bg-red-500 text-white px-4 py-2 rounded mt-2"
                    >
                      Disconnect
                    </button>
                  </div>
                )}
                <button
                  onClick={getBountyData}
                  className="bg-green-500 text-white px-4 py-2 rounded mt-4"
                >
                  Get Bounty Data
                </button>
                {bountyData && (
                  <div className="mt-4">
                    <h2 className="text-xl font-bold">Bounty Details:</h2>
                    <pre>{JSON.stringify(bountyData, null, 2)}</pre>
                  </div>
                )}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}